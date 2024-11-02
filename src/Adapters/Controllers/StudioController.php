<?php

namespace Adapters\Controllers;

use UseCases\ManageStudio;
use Entities\Studio;

class StudioController
{
    private ManageStudio $studioManager;

    public function __construct(ManageStudio $studioManager)
    {
        $this->studioManager = $studioManager;
    }

    public function createStudio(array $data): bool
    {
        $studio = new Studio();
        $studio->nama_studio = $data['nama_studio'];
        return $this->studioManager->create($studio);
    }

    public function getAllStudios(): array
    {
        return $this->studioManager->fetchAll();
    }

    public function getStudioById(int $idstudio): array
    {
        return $this->studioManager->fetchById($idstudio);
    }

    public function updateStudio(array $data): bool
    {
        $studio = new Studio();
        $studio->idstudio = $data['idstudio'];
        $studio->nama_studio = $data['nama_studio'];
        return $this->studioManager->update($studio);
    }

    public function deleteStudio(int $idstudio): bool
    {
        return $this->studioManager->delete($idstudio);
    }
}
